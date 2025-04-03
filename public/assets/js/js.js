$(document).ready(function () {
    $('.table').DataTable({
        ordering: true,
        paging: true,
        searching: true,
        responsive: true,

    })

    // AJAX request to fetch student data

    // $.ajax({
    //     url: 'api/auth/display/student',
    //     type: 'GET',
    //     success: function(response)
    //     {
    //         console.log(response)
    //     },
    //     error:function(xhr,status,error)
    //     {
    //         console.error(xhr,responseText)
    //     }
    // })

    //AJAX request to fetch student data

    //  $.ajax({
    //     url: 'api/auth/display/student',
    //     type: 'GET',
    //     success: function(response)
    //     {
    //         var stud = response.students

    //         if(response.success)
    //             console.log(stud)
    //             var body = $('#tablebody')
    //             body.empty()

    //             for(var i = 0; i < stud.length; i++)
    //             {
    //                 body.append(`<tr>
    //                     <td>${stud[i].id_number}</td>
    //                     <td>${stud[i].last_name}, ${stud[i].first_name} ${stud[i].middle_name}</td>
    //                     <td>${stud[i].departments[0]?.departments || "N/A"}</td>
    //                     <td>${stud[i].grades[0]?.MidtermGrade || "N/A"}</td>
    //                     <td>${stud[i].grades[0]?.FinalGrade || "N/A"}</td>
    //                     <td>${stud[i].grades[0]?.cumulativeGrade || "N/A"}</td>
    //                 </tr>`);

    //             }

    //     },
    //     error:function(xhr,status,error)
    //     {
    //         console.error(xhr,responseText)
    //     }
    // })

    //AXIOS

    //     axios.get('api/auth/display/student').then(function(response)
    //     {
    //     var stud =  response.data.students
    //     if(response.data.success)
    //     {
    //          console.log(stud)
    //         var body = $('#tablebody')
    //              body.empty()

    //              stud.forEach(function(item)
    //             {
    //                 body.append(
    //                     `<tr>
    //                       <td>${item.id_number}</td>
    //                       <td>${item.last_name}, ${item.first_name} ${item.middle_name}</td>
    //                      <td>${item.departments[0]?.departments}</td>
    //                      <td>${item.grades[0]?.MidtermGrade}</td>
    //                      <td>${item.grades[0]?.FinalGrade}</td>
    //                      <td>${item.grades[0]?.cumulativeGrade }</td>
    //                      </tr>`);

    //             });
    //     }
    //     //console.log(stud)
    //     console.log(response)
    // }).catch(function(error)
    // {
    //     console.error(error)
    // })

    //FETCH
    fetch('api/auth/display/student')
        .then(response => response.json())
        .then(data => {
            //console.log(data)
            if (data.success) {
                var stud = data.students
                console.log(stud)
                var body = $('#tablebody')
                body.empty()


                let index = 0;
                console.log(stud.length)
                while (index < stud.length) {
                    body.append(
                        `<tr>
                                              
            <td>${stud[index].id_number}</td>
            <td>${stud[index].last_name}, ${stud[index].first_name} ${stud[index].middle_name}</td>
            <td>${stud[index].departments?.[0]?.departments || "No department"}</td>
            <td>${stud[index].grades?.[0]?.MidtermGrade || "No midterm grade"}</td>
            <td>${stud[index].grades?.[0]?.FinalGrade || "No final grade"}</td>
            <td>${stud[index].grades?.[0]?.cumulativeGrade || "No cumulative grade"}</td>
        </tr>`)

                    index++;
                }
            }
        }).catch(function (error) {
            console.error(error)
        })

})
