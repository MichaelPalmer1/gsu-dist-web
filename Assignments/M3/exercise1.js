function power(base, exponent) {
	if (exponent <= -1) {
        return (1 / base) * power(base, exponent + 1);
	} else if (exponent === 0) {
        return 1;
	}
	return base * power(base, exponent - 1);
}

document.write("2^5 = " + power(2, 5) + "<br>");
document.write("3^10 = " + power(3, 10) + "<br>");
