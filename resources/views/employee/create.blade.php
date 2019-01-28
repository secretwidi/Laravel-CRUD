ini create dari view

<br /> <br />
<form method="POST"
 action="{{route ('Employee.store') }}">
 {{ csrf_field() }}

<input type="text" name="txt_id"/>
<input type="text" name="txt_name"/>
<input type="text" name="txt_address"/>
<input type="text" name="txt_phone_number"/>

<br /> <br />
<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />
<br>
</form>
