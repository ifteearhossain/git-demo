<!DOCTYPE html>
<html>
<body>

<?php

    public function reltionByCategory() {

        return $this->hasMany('App\Category' , 'category_id' , 'id');
    }

?>

</body>
</html>