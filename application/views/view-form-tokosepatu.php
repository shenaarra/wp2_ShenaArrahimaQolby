<html>

<head>
    <title>TOKO SEPATU</title>

</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th>
                        <h3>TOKO SEPATU PELANGI</h3>
                        <hr>
                    </th>
                </tr>

                <tr>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td> <input type="text" name='no' id='no' placeholder="No HP"></td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">--PILIH MERK SEPATU--</option>
                            <option value="Nike">NIKE</option>
                            <option value="Adidas">ADIDAS</option>
                            <option value="Kickers">KICKERS</option>
                            <option value="Eiger">EIGER</option>
                            <option value="Bucherri">BUCHERRI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="size" id="size">
                            <option value="">--PILIH UKURAN SEPATU--</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <button type="submit">KONFIRMASI</button>
                        <button type="reset">BATAL</button>
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>