<form action='formReceiveInfor.php' method='POST' name='form'>
    <label>Username</label>
    <input type='text' name='username'/> <br/>
    <label>Password</label>
    <input type='password' name='password'/> <br/>
    <label>Year Birth Day</label>
    <input type='date' name='yearBirthDay'/><br/>
    <label>Gender :</label>
    <input type='radio' value='male' name='gender'/> Male
    <input type='radio' value='female' name='gender'/> Female <br/>
    <label>Do you agree ?</label>
    <input type='checkbox' value='yes' name='check'/> Yes <br/>
    <label>Nationality</label>
    <select name='nationality'>
        <option value='vie'>Vietnam</option>
        <option value='chi'>China</option>
        <option value='uk'>Uk</option>
    </select>
    <br/>
    <label>Comment</label>
    <textarea name='comment'>
        Content
    </textarea> <br/>
    <input type='submit' name='btn' value='Send'/>
</form>