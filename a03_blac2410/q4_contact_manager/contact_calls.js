/**
 * Created by Q on 3/7/2015.
 */

function getContacts(tableId){
    var tbody = tableId + '> tbody';

    $.getJSON( "get_contacts.php",
        function( json ) {
            var index =0;
            while(index<json.length){
                contactAsRow(json[index]).appendTo(tbody);
                index++;
            }
    });
}

function getContactByName(tableId, firstName, lastName) {
    var tbody = tableId + '> tbody';
    $.getJSON("search_contacts.php",
        {"firstName": firstName, "lastName": lastName},
        function (json) {
            if(!jQuery.isEmptyObject(json)) {
                contactAsRow(json).appendTo(tbody);
            }
        });
}



function contactAsRow(contact){
    var row = $("<tr></tr>");
    var innerHtml = wrapAsCell(contact['id'])+
        wrapAsCell(contact['firstName'])+
        wrapAsCell(contact['lastName'])+
        wrapAsCell(contact['phoneNumber'])+
        wrapAsCell(contact['email']);

    row.html(innerHtml);
    return row;
}

function wrapAsCell(content){
    return "<td>"+content+"</td>";

}