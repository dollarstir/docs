<?php
YolkUI::run(new Wrapper(
    el::html('',
    [
        el::head([meta::viewport(),
        el::title('York Framework'),import('css'),
        ]),
        el::body([
            el::p('',"Send money with yolkpay"),
            Yolkpay::paybutton(),
            yolkpay::pay('Dollar','Stir','kpin463@gmail.com',),
            import('js'),
            yolkpay::handler(),

        ])
    ])
));