{include file = "header.tpl"}

<form action="registrar" method="POST">

        <div>
            <label>Nombre</label>
            <div>
                <input type="text" name="nombre" required autofocus>
            </div>
        </div>

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
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>

{include file = "footer.tpl"}