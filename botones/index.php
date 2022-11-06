<html>
    <body>
        <form action="index.php">
        <table>
            <tr>
                <?php
                    $opcion = intval($_POST['opcion']);
                ?>   
                <td colspan="4">
                    <input type="text" 
                    value= <?php echo $opcion; ?> >
                </td>
            </tr>                                                            
            <tr>
                <td>
                    <input type="submit" name="opcion" value="1">
                </td>
                <td>
                    <input type="submit" name="opcion" value="2">
                </td>
                <td>
                    <input type="submit" name="opcion" value="3">
                </td>
                <td>
                    <input type="submit" name="opcion" value="4">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="opcion" value="5">
                </td>
                <td>
                    <input type="submit" name="opcion" value="6">
                </td>
                <td>
                    <input type="submit" name="opcion" value="7">
                </td>
                <td>
                    <input type="submit" name="opcion" value="8">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="opcion" value="9">
                </td>
                <td>
                    <input type="submit" name="opcion" value="0">
                </td>
                <td>
                    <input type="submit" name="cl" value="cl">
                </td>
                <td>
                    <button type="submit">Enviar</submit>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>