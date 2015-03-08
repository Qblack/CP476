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

function createContact(id, firstName, lastName, phoneNumber, email, password) {
    $.ajax("create_contact.php",
        {
            type:'POST',
            dataType: "json",
            data: {"id":id,"firstName":firstName,"lastName":lastName,"phoneNumber":phoneNumber,"email":email,"password":password}
        }
    ).success(function(){
        displayCreated();
    }).fail(function(){
            failed();
    })
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

function failed(){
    $("#alertArea").addClass("alert alert-danger alert-dismissible");
    $("#alertArea").html('<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">&times;</span></button>' +
    '<strong>Danger!</strong> User was not created');
}

function displayCreated(){
    $("#alertArea").addClass("alert alert-success alert-dismissible");
    $("#alertArea").html('<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">&times;</span></button>' +'<strong>Awesome!</strong> User was created </div>');
}