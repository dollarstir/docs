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
            yolkpay::pay('Dollar','Stir','example@gmail.com','0556676471',
            '10','ASDDSD2322'),
            import('js'),
            yolkpay::handler(),
        ])
    ])
));