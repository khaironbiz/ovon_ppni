<html>
    <head>
        <title>Cara Upload dan Resize Gambar dengan PHP</title>
    </head>
    <body>
        <h3>Upload dan Resize Gambar</h3>
        <form method="POST" action="resize.php" enctype="multipart/form-data">
            <table border="0">
                <tr>
                    <td width="80">Pilih File</td>
                    <td width="280">: <input type="file" name="file_gambar" /></td>
                    <td><input type="submit" name="submit" value="Upload" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>