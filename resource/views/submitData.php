<!--Content Itens Menu-->
                        <input id="SubmitData" type="submit" hidden="value" name="view" value="submitData"/><label for="SubmitData"><?php echo $this->language->submitData ?></label>
                    </form><br>
                    <h3><?php echo $this->language->newInfo ?></h3>
                    <form method="post" enctype="multipart/data-form">
                        <label for="Spiece"><?php echo $this->language->spiece ?></label>
                        <input id="Spiece" type="text" name="spiece" placeholder="<?php echo $this->language->spiece ?>"/>
                        <label for="Kingdom"><?php echo $this->language->kingdom ?></label>
                        <input id="Kingdom" type="text" name="kingdom" placehold="<?php echo $this->language->kingdom ?>"/>
                        <label for="Habitat"><?php echo $this->language->habitat ?></label>
                        <input id="Habitat" type="text" name="habitat" placehold="<?php echo $this->language->habitat ?>"/>
                        <label for="CommonName"><?php echo $this->language->commonName ?></label>
                        <input id="CommonName" type="text" name="commonName" placehold="<?php echo $this->language->commonName ?>"/>
                        <label for="Pic"><?php echo $this->language->pic ?></label>
                        <input id="Pic" type="file" name="pic" placehold="<?php echo $this->language->pic . '.jpg'?>">
                        <input type="hidden" name="view" value="submitData"/>
                        <input type="submit" value="<?php echo $this->language->submit?>"/>
                    </form>