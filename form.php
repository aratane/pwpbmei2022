<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Form Berbasis Input Proses dan Output</title>
</head>

<body bgcolor='gray'>
    <br>
    <br>
    <table width="50td_persen" border="0" align="center">
        <tr>
            <td width="35td_persen">
                <table border="0" width="100td_persen" bgcolor="#00CCFE">
                    <tr>
                        <td>
                            <h3>
                                <font face="Times New Roman, Times, serif">
                                    <p align="center">
                                        FORM INPUT DATA
                                    </p>

                                </font>
                            </h3>
                        </td>
                    </tr>
                </table>

                <form method="post" action="tangkap.php">
                    <table border="0" width="100td_persen" bgcolor="#FFFFFFF">
                        <tr>
                            <td>
                                <p align="right">NAMA</p>
                            </td>
                            <td width="10">:</td>
                            <td>
                                <input type="text" name="nama">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p align="right">JENIS KELAMIN</p>
                            </td>
                            <td width="10">:</td>
                            <td>
                                <input type="radio" name="gender" value="Pria">Pria
                                <input type="radio" name="gender" value="Wanita">Wanita
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p align="right">AGAMA</p>
                            </td>
                            <td widht="10">:</td>
                            <td>
                                <select name="agama">
                                    <option selected="selected" value="">----------- Pilih ----------</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p align="right">HOBI</p>
                            </td>
                            <td widht="10">:</td>
                            <td>
                                <input type="checkbox" name="hobi1" value="Makan," />Makan<br>
                                <input type="checkbox" name="hobi2" value="Main," />Main<br>
                                <input type="checkbox" name="hobi3" value="Tidur," />Tidur
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p align="right">KOMENTAR</p>
                            </td>
                            <td width="10">:</td>
                            <td>
                                <textarea name="komentar"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="kirim" value="KIRIM"> ||
                                <input type="reset" name="reset" value="CANCEL">
                            </td>
                        </tr>

                    </table>
                </form>

            </td>
        </tr>
    </table>

</body>

</html>