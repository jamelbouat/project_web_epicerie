<?php
    // The function receives the four variables and renders the label, the input itself and the error if it is present
    // After clicking on the submit button, the input keeps its last value already entered
    function SignUpInputView($fieldName, $error, $label, $inputType) {
?>
        <div class="col-md form-group">
            <label for="<?php echo $fieldName ?>">
                <?php echo $label ?> :
            </label>

            <input name = "<?php echo $fieldName ?>"
                   type = "<?php echo $inputType ?>"
                   placeholder = "<?php echo $label ?>"
                   id = "<?php echo $fieldName ?>"
                   class = "form-control <?php if (isset($_GET[$error])) { echo !empty($_GET[$error]) ? 'is-invalid' : 'is-valid'; } ?>"
                   value = "<?php if (isset($_GET[$fieldName])) { echo $_GET[$fieldName]; } else {echo '';} ?>"
            >

            <?php if (isset($_GET[$error])) { ?>
                <div class= "<?php echo (isset($_GET[$error])) ? 'invalid-feedback' : 'valid-feedback'; ?>" >
                    <?php echo $_GET[$error]; ?>
                </div>
            <?php }?>
        </div>
<?php
    }
?>