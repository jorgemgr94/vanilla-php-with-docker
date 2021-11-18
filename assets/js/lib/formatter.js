const formatFloatNumber = (value) => {
	return (
		"$ " +
		parseFloat(value)
			.toFixed(2)
			.toString()
			.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
	);
}

const formatIntNumber = (value) => {
	return (
		"$ " +
		parseInt(value)
			.toString()
			.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
	);
}

const formatFloatValue = (value) => {
	return parseFloat(value)
		.toFixed(2)
		.toString()
		.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

const formatIntValue = (value) => {
	return parseInt(value)
		.toString()
		.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

const formatFloatPercentage = (value) => {
	return value.toFixed(2) + " %";
}

const formatIntPercentage = (value) => {
	return parseInt(value) + " %";
}

export {
	formatFloatNumber, formatIntNumber, formatFloatValue, formatIntValue, formatFloatPercentage, formatIntPercentage
}