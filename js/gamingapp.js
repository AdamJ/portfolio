$('#target').click(function() {
    $('#output').html(function(i, val) {
        return val*1+1
    });
});
$('#clear').click(function() {
    $('#output').html(function(i, val) {
        return val*0
    });
});