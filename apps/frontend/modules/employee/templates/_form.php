

<form action=""> 
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('employee/index') ?>">Back to list</a>
           
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form['father_name'] ?>
    </tbody>
  </table>
</form>
