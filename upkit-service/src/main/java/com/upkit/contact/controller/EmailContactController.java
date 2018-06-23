package com.upkit.contact.controller;

import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestMapping;

@RestController
public class EmailContactController {

    @RequestMapping("/upkit")
    public String index() {
        return "Upkit mail stuff";
    }

}