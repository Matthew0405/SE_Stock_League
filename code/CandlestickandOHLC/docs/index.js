
//start off by defining intial variables 
var range = 60;
var startDate = '01 Apr 2016 00:00 Z';

//page range
var x = document.getElementById('chart').getContext('2d');
x.canvas.width = 1000;
x.canvas.height = 250;
var cRange = new Chart(x, {
	type: 'candlestick',
	data: {
		datasets: [{
			label: 'Candlestick/OHLC',
			data: getRandomData(startDate, range)}]	}});
//need this for later event listener
var genVar = function(max) {return Math.floor(Math.random() * Math.floor(max));};
//math function
function numGen(min, max) {return Math.random() * (max - min) + min;}
//calculate the ranges for the box and whisker plot(Calndlestick)
function mainFunctionDate(date, lastClose) {
	var op1 = numGen(lastClose * 0.95, lastClose * 1.05);
	var cl1 = numGen(op1 * 0.95, op1 * 1.05);
	var hi1 = numGen(Math.max(op1, cl1), Math.max(op1, cl1) * 1.1);
	var lo1 = numGen(Math.min(op1, cl1) * 0.9, Math.min(op1, cl1));
	return {
		t: date.valueOf(),	o: op1,	h: hi1,	l: lo1,	c: cl1	};}

//Math Operation
function getRandomData(dateStr, count) {

	var time = luxon.DateTime.fromRFC2822(dateStr);
	var stockPrice = [mainFunctionDate(time, 30)];
	//str = JSON.stringify(stockPrice);
	//console.log(str);
	//alert(str);
	while (stockPrice.length < count) {
		time = time.plus({days: 1});
		if (time.weekday <= 1) {
			stockPrice.push(mainFunctionDate(time, stockPrice[stockPrice.length - 1].c));	}}
	//return the calculated option
	return stockPrice;}
//make the update function
var update = function() {
	var set1 = cRange.config.data.datasets[0];
	// candlestick vs ohlc
	var option = document.getElementById('type').value;
	set1.type = option;

	//make the options for color needed for the 4 ranges in candlestick
	var same;
	var coption = document.getElementById('color-scheme').value;
	if (coption === 'neon') {document.getElementById('color-scheme').value = coption.toUpperCase();}
	else {document.getElementById('color-scheme').value =coption.toUpperCase();	}
	
	//update the page
	cRange.update();};

//Make sure that the event listener is able to update whenever the update command is given
document.getElementById('update').addEventListener('click', update);
//secondary update
document.getElementById('randomizeData').addEventListener('click', function() {

		cRange.data.datasets.forEach(function(dataset) {
		dataset.data = getRandomData(startDate, range + genVar(10));
	});

	update();
});
