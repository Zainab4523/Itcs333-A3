<script>
        fetch('https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('studentData');
                data.results.forEach(record => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${record.year}</td>
                        <td>${record.semester}</td>
                        <td>${record.the_programs}</td>
                        <td>${record.nationality}</td>
                        <td>${record.colleges}</td>
                        <td>${record.number_of_students}</td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Bahrain Students Enrollment</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <h1>University of Bahrain Students Enrollment by Nationality</h1>
    <div class="overflow-auto">
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>The Programs</th>
                <th>Nationality</th>
                <th>Colleges</th>
                <th>Number of Students</th>
            </tr>
        </thead>
        <tbody id="studentData">
            
        </tbody>
    </table>
        </div>
</body>
</html>