<form name="form1" method="post" action="email.php">
  <table width="100" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr bgcolor="#F4F4F4"> 
      <td valign="top" width="100" nowrap><font class="texto">Nome:</font></td>
      <td> 
        <input class="form_campos" type="text" name="nome" size="34">
      </td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td valign="top" width="100" nowrap><font class="texto">E-mail:</font></td>
      <td> 
        <input class="form_campos" type="text" name="email" size="34">
      </td>
    </tr>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td valign="top" width="100" nowrap><font class="texto">Telefone(ddd+nº):</font></td>
      <td> 
        <input class="form_campos" type="text" name="telefone" size="34">
      </td>
    </tr>
    <tr bgcolor="#F4F4F4"> 
      <td valign="top" width="150" nowrap><font class="texto">Equipamento:</font></td>
      <td> 
        <select class="form_campos" name="equipamento">
          <option class="form_campos" value="Celular" selected>Celular</option>
          <option class="form_campos" value="Tablet">Tablet</option>
          <option class="form_campos" value="iPhone">iPhone</option>
          <option class="form_campos" value="iPad">iPad</option>
          <option class="form_campos" value="iPod">iPod</option>
          <option class="form_campos" value="iMac">iMac</option>
          <option class="form_campos" value="MacBook">MacBook</option>
          <option class="form_campos" value="Notebooks">Notebooks</option>
          <option class="form_campos" value="Computador">Computador</option>
        </select>
      </td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td valign="top" width="100" nowrap><font class="texto">Modelo:</font></td>
      <td> 
        <input class="form_campos" type="text" name="modelo" size="20">
      </td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td valign="top" width="100" nowrap><font class="texto">Defeito:</font></td>
      <td> 
        <textarea class="form_campos" name="defeito" cols="34" rows="4"></textarea>
      </td>
    </tr>
    <tr bgcolor="#F4F4F4"> 
      <td valign="top" width="100" nowrap><font class="texto">Em Garantia?(sim/não):</font></td>
      <td> 
        <input class="form_campos" type="text" name="emgarantia" size="11">
      </td>
    </tr>
    <tr bgcolor="#F4F4F4"> 
      <td colspan="2" valign="middle"> 
	  	<br>
        <div align="center"> 
          <input class="form_botao" type="submit" name="Enviar" value="Enviar Orçamento">
          <input class="form_botao" type="reset" name="Limpar" value="Limpar">
        </div>
      </td>
    </tr>
  </table>
</form>
