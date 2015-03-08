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
            addEdits();
    });
}

function getContactByName(tableId, firstName, lastName) {
    var tbody = tableId + '> tbody';
    $.ajax("search_contacts.php",{
        type:"GET",
        dataType: "json",
        data: {"firstName": firstName, "lastName": lastName},
        contentType: "application/json; charset=UTF-8",
        success: function (json) {
            if(!jQuery.isEmptyObject(json)) {
                contactAsRow(json).appendTo(tbody);
                addEdits();
            }
        }});
}

var fillForm = function (contact) {
    document.getElementById("id").value = contact["id"];
    document.getElementById("firstName").value = contact["firstName"];
    document.getElementById("lastName").value = contact["lastName"];
    document.getElementById("phoneNumber").value = contact["phoneNumber"];
    document.getElementById("email").value = contact["email"];
    document.getElementById("password").value = "******";
};
function getContactById(id){
    $.ajax({
            async: false,
            url:"search_contacts.php",
            dataType: 'json',
            data: {'id':id}
        }).success(function(json){
            return fillForm(json);
        });
}

function updateContact(id, firstName, lastName, phoneNumber, email, password) {
    $.ajax("update_contact.php",
        {
            type:'POST',
            dataType: "json",
            data: {"id":id,"firstName":firstName,"lastName":lastName,"phoneNumber":phoneNumber,"email":email,"password":password}
        }
    ).success(function(){
        displaySuccess();
    }).fail(function(){
            failed();
    })
}

function createContact(id, firstName, lastName, phoneNumber, email, password) {
    $.ajax("create_contact.php",
        {
            type:'POST',
            dataType: "json",
            data: {"id":id,"firstName":firstName,"lastName":lastName,"phoneNumber":phoneNumber,"email":email,"password":password}
        }
    ).success(function(){
            displaySuccess();
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
    '<strong>Danger!</strong> Failure');
}

function displaySuccess(){
    $("#alertArea").addClass("alert alert-success alert-dismissible");
    $("#alertArea").html('<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">&times;</span></button>' +'<strong>Awesome!</strong> Success </div>');
}

function addEdits(){
    var tableRows = $(tableId+" > tbody > tr");
    var index = 0;
    while(index<tableRows.length){
        var row = tableRows[index];
        row.innerHTML+='<a class="btn btn-default" href="edit_contact.php?id='+$(row.cells[0]).text()+'">' +
        '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>' +
        '</a>';
        index++;
    }
}