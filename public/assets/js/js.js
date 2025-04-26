$(document).ready(function () {
    $('.studentsTable').DataTable({
        ordering: true,
        paging: true,
        searching: true,
        responsive: true
    });

    var fname = $('#firstname')
    var lname = $('#lastname')

    function displayStudents() {
        axios.get('api/auth/display/student')
        .then(function(response) {
            var stud = response.data.students;
            if (response.data.success) {
                var table = $('.studentsTable').DataTable();
                table.clear();

                // Ensure data matches table headers
                stud.forEach(function(item) {
                    table.row.add([
                        `<div class="text-center">${item.id}</div>`,
                        `<div class="text-center">${item.first_name}</div>`,
                        `<div class="text-center">${item.last_name}</div>`,
                        `<div class="d-flex align-items-center justify-content-center ml-2 forTags">
                           <div><a type="button" class="ml-2 btn btn-info" data-mdb-ripple-init>View</a></div>
                           <div><a type="button" class="ml-2 btn btn-warning" data-mdb-ripple-init>Edit</a></div>
                           <div><a type="button" class="ml-2 btn btn-danger" data-mdb-ripple-init>Delete</a></div>
                        </div>`
                    ]);
                });

                table.draw(false);
            }
        })
        .catch(function(error) {
            console.error(error);
        });
    }

    displayStudents();

    $('.addStudent').on('click', () => {
        $('.addStudentModal').show();
    });

    $('.saveButtons').on('click', function(){

        // console.log('test')
        if(fname.val().trim() ===  "" || lname.val().trim() ===  "" )
        {
            alert("Please fill all the fields");
            return
        }

        axios.post('/api/auth/add-student',{
            first_name: fname.val().trim(),
            last_name:  lname.val().trim(),
        }).then((response) =>
        {
            console.log(response)
            closeModal()
            displayStudents()
            clearFields()

        }).catch((error) =>
    {
        console.error(error)
    })

    })
});

function closeModal(){
    $('.addStudentModal').hide();
}

function clearFields()
{
    $('#firstname').val("");
    $('#lastname').val("");
}

