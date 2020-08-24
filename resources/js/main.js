function InsertRows() {
    jQuery.ajax({
        url: 'http://127.0.0.1:8000/api/test2',
        data: {'url':"https://my.inxy.com/json/servers_catalog.json"},
        type: 'POST',
        success: function(data) {
            alert(data);
        }
    });
}
