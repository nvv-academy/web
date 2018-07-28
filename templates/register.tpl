{extends file="layout.tpl"}

{block name=body}
    <h2>Register</h2>
    {if isset($smarty.get.err)}
        <div style="color: red;">{$smarty.get.err}</div>
    {/if}
    <form action="/?action=register" method="POST" style="width: 300px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="login" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </form>
    <a href="/?action=login">Login</a>
{/block}