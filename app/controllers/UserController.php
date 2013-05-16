<?php

class UserController extends BaseController {
    /**
     * Deneme bir controller
     */
    public function showThis($id)
    {
        return "showing id in Controllers showThis method: " . $id;
    }
}
