<?php

class Form
{
    private $fields = [];
    private $action;
    private $submit = "Submit Form";
    private $jumlah_field = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function display_form()
    {
?>
        <form action="<?= $this->action ?>" method="post">
            <?php for ($j = 0; $j < count($this->fields); $j++) : ?>
                <div class="form-group">
                    <label for=""><?= $this->fields[$j]['label'] ?></label>
                    <input type="text" name="<?= $this->fields[$j]['name'] ?>">
                </div>
            <?php endfor ?>
            <button type="submit" value="<?= $this->submit ?>"><?= $this->submit ?></button>
        </form>
<?php
    }

    public function add_field($name, $label)
    {
        $this->fields[$this->jumlah_field]['name'] = $name;
        $this->fields[$this->jumlah_field]['label'] = $label;
        $this->jumlah_field++;
    }
}
