            <form method="post">
                <input id="Signin" type="submit" hidden="value" name="view" value="signin"><label for="Signin"><?php echo $this->language->signin ?></label>
                <p> <?php echo $this->language->either ?> </p>
                <input id="Signup" type="submit" hidden="value" name="view" value="signup"><label for="Signup"><?php echo $this->language->signup ?></label>
            </form>