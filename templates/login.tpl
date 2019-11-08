{include file = "header.tpl"}
    <form action="identificar" method="POST">
            <div>
                <label>E-Mail</label>
                    <div>
                        <input type="email" name="email" required autofocus>
                    </div>
            </div>

            <div>
                <label>Password</label>
                <div>
                     <input type="password" name="password" required>
                </div>
            </div>

            <div>
                <button type="submit">Log In</button>
                <a href="registrarse"><input type="button" value="Registrarse" name="register"></a>
            </div>
        </div>
    </form>
{include file = "footer.tpl"}