$('document').ready(init);
			
function init(){
    $('#item1, #item2, #item3, #item4, #item5').bind('dragstart', function(event) {
        event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
    });
    
    // bind the dragover event on the board sections
    $('#backlog, #todo, #inProgress, #blocked, #done').bind('dragover', function(event) {
        event.preventDefault();
    });
    
    // bind the drop event on the board sections
    $('#backlog, #todo, #inProgress, #blocked, #done').bind('drop', function(event) {
    var notecard = event.originalEvent.dataTransfer.getData("text/plain");
    event.target.appendChild(document.getElementById(notecard));
    // Turn off the default behaviour
    // without this, FF will try and go to a URL with your id's name
    event.preventDefault();
    });
}
$('document').ready(function(){
    $('#insert_form').on("submit", function(event){  
     event.preventDefault();  
     alert("testing");
     if($('#description').val() == "")  
     {  
      alert("description is required");  
     }  
   
      
     else  
     {  
      $.ajax({  
       url:"insert.php",  
       method:"POST",  
       data:$('#insert_form').serialize(),  
       beforeSend:function(){  
        $('#insert').val("Inserting");  
       },  
       success:function(data){  
        $('#insert_form')[0].reset();  
        $('#add_data_Modal').modal('hide');  
        $('#employee_table').html(data);  
       }  
      });  
     }  
    });
})