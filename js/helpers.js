// Outputting an array or any another variable.
function out(value, el_id) {
	if (Array.isArray(value)) {
		document.getElementById(el_id).innerHTML += "<pre>" + JSON.stringify(value, null, 4) + "</pre>";
	} else {
		document.getElementById(el_id).innerHTML += value;
	}
}

Array.prototype.unique = function() {
    var unique = this.concat();
    for(var i = 0; i < unique.length; ++i) {
        for(var j = (i + 1); j < unique.length; ++j) {
            if(unique[i] === unique[j])
                unique.splice(j--, 1);
        }
    }
    return unique;
};

function die(message, id) {
	out("<p>" + message + "</p>", id);
    throw new Error(message);
}