from flask import Flask, render_template, jsonify, request, session
from flask_restful import Api, Resource, reqparse
from flask_bootstrap import Bootstrap
import requests
from datetime import datetime

app = Flask(__name__)
app.secret_key = "secreto"
Bootstrap(app)

users = {"Andrew": {"TSM": 4, "MSFT": 5, "BMY": 6, "IBM": 2, "INTL": 1},\
		"Bob": {"MSFT": 2, "AAPL": 2},\
		"Carl" : {"VZ": 1, "JNJ": 1, "GOOG": 4},\
		"Dave": {"GE": 4, "TSLA": 1}}

@app.route('/')
def hello_world():
	return render_template("index.html")

@app.route('/stocks/', methods=['POST'])
def f():
	return render_template("index.html")

@app.route('/login', methods=['POST'])
def login():
	if request.method == 'POST':
		if 'user' not in session or not session['user']:
			session['user'] = []
		session['user'].append(request.form['name'])
		session.modified = True
	return render_template("index.html", users=session['user'])

@app.route('/clear')
def clear():
	session.clear()
	return render_template("index.html")

@app.route('/users/', methods=['GET'])
def user():
	name = request.args.get('user')
	if name == "Andrew":
		fr = "http://sites.simbla.com/1d9c7e23-8bb3-b63a-cf11-4fd06d9aeb08/andrew"
	elif name == "Bob":
		fr = "http://sites.simbla.com/1d9c7e23-8bb3-b63a-cf11-4fd06d9aeb08/bob"
	elif name == "Carl":
		fr = "http://sites.simbla.com/1d9c7e23-8bb3-b63a-cf11-4fd06d9aeb08/carl"
	else:
		fr = "http://sites.simbla.com/1d9c7e23-8bb3-b63a-cf11-4fd06d9aeb08/dave"

	stocks = users[name]
	compare = request.args.get('compare')
	if not compare:
		compare = "SPY"
	url = "https://api.iextrading.com/1.0/stock/" + compare + "/chart/5y"
	data = requests.get(url).json()
	benchmark = [[datetime.strptime(d['date'], '%Y-%m-%d').timestamp() * 1000, round(float(d['close']), 2)] for d in data]
	benchmark = [[x[0], x[1] / benchmark[0][1]] for x in benchmark]
	rt2 = round((benchmark[-1][1]-benchmark[0][1]) * 100, 2)

	port = [[datetime.strptime(d['date'], '%Y-%m-%d').timestamp() * 1000, 0] for d in data]

	stocks2 = []
	for s in stocks:
		url = "https://api.iextrading.com/1.0/stock/" + s + "/chart/5y"
		data = requests.get(url).json()
		for i in range(len(data)):
			port[i][1] += stocks[s] * round(float(data[i]['close']), 2)
		last = round(float(data[-1]['close']), 2)
		stocks2.append([s, stocks[s], last, round(stocks[s]*last, 2)])
	port = [[x[0], x[1] / port[0][1]] for x in port]
	rt1 = round((port[-1][1]-port[0][1]) * 100, 2)

	# tot = sum(s[3] for s in stocks2)
	pie1 = [s[0] for s in stocks2]
	pie2 = [s[3] for s in stocks2]
	pie = [{'name': s[0], 'y': s[3]} for s in stocks2]
	return render_template("chart.html", port=port, name=name, bm=benchmark, stocks=stocks2, pie=pie, rt1=rt1, rt2=rt2, compare=compare,fr=fr)
if __name__ == '__main__':
	app.run(debug=True)

