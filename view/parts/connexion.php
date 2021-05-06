<main id="main-registration">
    <section id="sec-connection" class="centred-section accounts">

        <form class="form-accounts" action="../index.php?action=connection" method="post">
            <section>
                <header>
                    <h3>CONNECTION</h3>
                </header>

                <table class="table-form-accounts">
                    <tr>
                        <th>Pseudo</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form_textfield" name="pseudo" required autocomplete="off">
                        </td>
                        <td>
                            <input type="password" class="form_textfield" name="pass" required autocomplete="off">
                        </td>
                    </tr>
                </table>
            </section>
            <div>
                <input class="round-big-btn green" type="submit" value="OK">
            </div>
        </form>
    </section>

<section id="sec-registration" class="centred-section accounts">

        <form class="form-accounts" id="form-registration" action="../index.php?action=registration" method="post">

        <section>
            <header>
                <h3>REGISTRATION</h3>
            </header>

            <table class="table-form-accounts">
                <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form_textfield" name="reg_pseudo" value="" autocomplete="off" required >
                    </td>
                    <td>
                        <input type="email" class="form_textfield" name="reg_mail" value="" autocomplete="off" required >
                    </td>
                </tr>
            </table>

            <table class="table-form-registration">
                <tr>
                    <th>Password</th>
                    <th>Repeat password</th>
                </tr>

                <tr>
                    <td>
                        <input type="password" class="form_textfield" name="reg_pass" value="" autocomplete="off" required >
                    </td>
                    <td>
                        <input type="password" class="form_textfield" name="reg_pass_repeat" autocomplete="off" required >
                    </td>
                </tr>
            </table>
        </section>

            <div>
                <input class="round-big-btn green" type="submit" value="OK" >
            </div>
        </form>
    </section>

</main>

