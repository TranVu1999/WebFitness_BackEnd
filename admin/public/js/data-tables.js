(function($) {
  'use strict';
var dataSet = [
    [ "101" ," <img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Tiger Nixon", "tiger@123gmail.com", "5421", "Low Rider","2025", ],
    [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722","Ingrid", "2025",  ],
    [ "103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422","White Widow", "202",  ],
    ["104" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "8512", "Low Rider", "2003", ],
    [ "105" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322","Super Skunk", "2025",  ],
    [ "106" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565","Low Rider", "2025", ],
    [ "107" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Jenny", "jenny@123gmail.com",  "9565","Super Skunk", "2025", ],
    [ "108" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'>Bella", "bella@123gmail.com",  "5625","White Widow", "2015", ],
    ["109" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Ingrid", "2005", ],
    [ "110" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider", "2003", ],
    [ "111" ,"<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "tiger@123gmail.com", "5421", "Low Rider","2025", ],
    [ "112" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722","Ingrid", "2025",  ],
    [ "113" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422","White Widow", "202",  ],
    ["114" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'>Jhon", "Jhon@123gmail.com",  "8512", "Low Rider", "2003", ],
    [ "115" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322","Super Skunk", "2025",  ],
    [ "116" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565","Low Rider", "2025", ],
    [ "117" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Jenny", "jenny@123gmail.com",  "9565","Super Skunk", "2025", ],
    [ "118" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Bella", "bella@123gmail.com",  "5625","White Widow", "2015", ],
    ["119" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Ingrid", "2005", ],
    [ "120" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider", "2003", ],
    [ "121" ,"<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "tiger@123gmail.com", "5421", "Low Rider","2025", ],
    [ "122" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722","Ingrid", "2025",  ],
    [ "123" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422","White Widow", "202",  ],
    ["124" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "8512", "Low Rider", "2003", ],
    [ "125" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322","Super Skunk", "2025",  ],
    [ "126" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565","Low Rider", "2025", ],
    [ "127" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Jenny", "jenny@123gmail.com",  "9565","Super Skunk", "2025", ],
    [ "128" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Bella", "bella@123gmail.com",  "5625","White Widow", "2015", ],
    [ "129" ,"<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "tiger@123gmail.com", "5421", "Low Rider","2025", ],
    [ "130" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722","Ingrid", "2025",  ],
    [ "131" , " <img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'>Harry", "Harry@123gmail.com",  "8422","White Widow", "202",  ],
    ["132" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "8512", "Low Rider", "2003", ],
    [ "133" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322","Super Skunk", "2025",  ],
    [ "134" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565","Low Rider", "2025", ],
    [ "135" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'>Jenny", "jenny@123gmail.com",  "9565","Super Skunk", "2025", ],
    [ "136" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'>Bella", "bella@123gmail.com",  "5625","White Widow", "2015", ]
  ];
var dataSet1 = [
      [ "101" ," <img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Tiger Nixon", "tiger@123gmail.com", "421", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722","2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422", "202",  "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
      ["104" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "8512",  "2003", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "105" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322","2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "106" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565","2025","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "107" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Jenny", "jenny@123gmail.com",  "9565","2025","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "108" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'>Bella", "bella@123gmail.com",  "5625", "2015", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      ["109" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525", "2005", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "110" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321", "2003","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "111" ,"<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "tiger@123gmail.com", "5421", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "112" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "113" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422", "202", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      ["114" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'>Jhon", "Jhon@123gmail.com",  "8512", "2003", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "115" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "116" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "9565", "2025","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "117" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Jenny", "jenny@123gmail.com",  "9565", "2025","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "118" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Bella", "bella@123gmail.com",  "5625", "2015","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      ["119" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525", "2005", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "120" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321", "2003","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "121" ,"<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "tiger@123gmail.com", "5421", "2025","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "122" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Garrett Winters", "Garrett@123gmail.com",  "8722", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
      [ "123" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "8422", "202","<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"  ],
      ["124" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "8512",  "2003", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "125" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Henrry", "Henrry@123gmail.com",  "8322", "2025", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ]


      ];



    var dataSet2 = [
        [ "101" ," <img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider",  "5421", "2025" ,"2" ,"$520.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#' > <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "102" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Ingrid",   "8722", "2002", "3", "$590.50" ,"<span class='badge badge-danger'>Pending</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "103" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> White Widow",   "8422",  "2013", "1","$650.50" ,"<span class='badge badge-primary'>Paid</span>", "<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        ["104" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider",  "8512",  "2003","2","$450.50" ,"<span class='badge badge-warning'>Conflict</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "105" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Super Skunk", "8322","2011/1/02","3","$750.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
        [ "106" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Low Rider",   "9565", "2025","5","$950.50" ,"<span class='badge badge-danger'>Pending</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
        [ "107" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Super Skunk",   "9565", "2025","1","$100.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],
        [ "108" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>White Widow",   "5625", "2015", "2","$150.50" ,"<span class='badge badge-danger'>Pending</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        ["109" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Ingrid",   "3525", "2005","5","$750.50" ,"<span class='badge badge-primary'>Paid</span>", "<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "110" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider",   "2321", "2003","2","$350.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "111" ,"<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Low Rider", "5421", "2025", "2","$150.50" ,"<span class='badge badge-warning'>Conflict</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "112" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Ingrid",   "8722", "2025","1","$850.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "113" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> White Widow",  "8422", "202","4","$250.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        ["114" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Low Rider", "8512",  "2003","4","$450.50" , "<span class='badge badge-danger'>Pending</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>"],
        [ "115" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Super Skunk",  "8322", "2025","3","$650.50" ,"<span class='badge badge-primary'>Paid</span>","<a href='#'> <i class='fas fa-paper-plane ms-text-primary'></i><i class='far fa-trash-alt ms-text-danger'></i></a>" ],


      ];
      var dataSet3 = [
        ["101" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider","$620.50", "2003"],
        [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Hennry", "Hennry@123gmail.com",  "2321","Hemp Oil","$450.50", "2003"],
        ["103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Super Skunk","$850.50", "2005" ],
        ["104" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "3525","Ingrid","$650.50", "2005" ],
        ["105" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Jack", "Jack@123gmail.com",  "2321","Low Rider","$320.50", "2003"],
        [ "106" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Bella", "Bella@123gmail.com",  "2321","Hemp Oil","$520.50", "2003"],
        ["107" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Alice", "Alice@123gmail.com",  "3525","UK Cheese","$550.50", "2005" ],
        ["108" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "3525","Ingrid","$450.50", "2005" ],
        ["109" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "2321","Low Rider","$220.50", "2003"],
        [ "110" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Peter", "Peter@123gmail.com",  "2321","Hemp Oil","$720.50", "2003"],
        ["111" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider","$620.50", "2003"],
        [ "112" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Hennry", "Hennry@123gmail.com",  "2321","Hemp Oil","$450.50", "2003"],
        ["113" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Super Skunk","$850.50", "2005" ],
        ["114" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "3525","Ingrid","$650.50", "2005" ],
        ["115" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Jack", "Jack@123gmail.com",  "2321","Low Rider","$320.50", "2003"],
        [ "116" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Bella", "Bella@123gmail.com",  "2321","Hemp Oil","$520.50", "2003"],
        ["117" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Alice", "Alice@123gmail.com",  "3525","UK Cheese","$550.50", "2005" ],
        ["118" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "3525","Ingrid","$450.50", "2005" ],
        ["119" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "2321","Low Rider","$220.50", "2003"],
        [ "120" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Peter", "Peter@123gmail.com",  "2321","Hemp Oil","$720.50", "2003"],

        ];

        var dataSet4= [
          ["101" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider","$620.50", "2003","2","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          [ "102" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Hemp Oil","$450.50", "2003","3","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["103" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Super Skunk","$850.50", "2005","4","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
          ["105" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider","$320.50", "2003","1","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["104" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Ingrid","$650.50", "2005","2","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>" ],
          [ "106" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Hemp Oil","$520.50", "2003","3","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["107" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> UK Cheese","$550.50", "2005" ,"1","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["108" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>Ingrid","$450.50", "2005" ,"5","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["109" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Low Rider","$220.50", "2003","4","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          [ "110" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Hemp Oil","$720.50", "2003","3","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["111" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Low Rider","$620.50", "2003","1","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          [ "112" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Hemp Oil","$450.50", "2003","6","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["113" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Super Skunk","$850.50", "2005" ,"2","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["114" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Ingrid","$650.50", "2005" ,"4","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["115" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Low Rider","$320.50", "2003","2","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          [ "116" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'>Hemp Oil","$520.50", "2003","3","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["117" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> UK Cheese","$550.50", "2005" ,"1","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["118" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Ingrid","$450.50", "2005" ,"2","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          ["119" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider","$220.50", "2003","4","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
          [ "120" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>Hemp Oil","$720.50", "2003","3","<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],

          ];
          var dataSet5 = [
              [ "101" ," <img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "Low Rider","2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Garrett Winters", "Ingrid", "2025",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Harry", "White Widow", "202",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              ["104" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Jhon", "Low Rider", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "105" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Henrry", "Super Skunk", "2025",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "106" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Moris", "Low Rider", "2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "107" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Jenny", "Super Skunk", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
              [ "108" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'>Bella", "White Widow", "2015", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              ["109" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Haris","Ingrid", "2005", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "110" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Anny", "Low Rider", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "111" ,"<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "Low Rider","2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "112" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Garrett Winters", "Ingrid", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ],
              [ "113" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Harry", "White Widow", "202", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
              ["114" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'>Jhon", "Low Rider", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "115" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Henrry","Super Skunk", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ]
            ];
var dataSet6 = [
[ "101" ," <img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider","Defective Product","2025", "2025", "2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "102" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Ingrid","Late Delivery", "2025", "2025", "2025",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "103" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> White Widow","Damaged Item","2025", "2025",  "202",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
["104" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider", "Wrong Product","2025", "2025", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "105" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Super Skunk","Defective Product","2025", "2025",  "2025",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "106" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Low Rider","Wrong Product","2025", "2025",  "2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "107" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Super Skunk","Late Delivery", "2025", "2025", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
[ "108" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>White Widow","Damaged Item", "2025", "2025", "2015", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
["109" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Ingrid","Defective Product", "2025", "2025", "2005", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "110" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'>Low Rider","Wrong Product", "2025", "2025", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "111" ,"<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Low Rider","Late Delivery","2025", "2025", "2025", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "112" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'>Ingrid", "Defective Product","2025", "2025", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ],
[ "113" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'>White Widow", "Damaged Item","2025", "2025", "202", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
["114" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>Low Rider", "Defective Product","2025", "2025", "2003", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
[ "115" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'>Super Skunk","Late Delivery", "2025", "2025", "2025","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ]
];

  var tableOne = $('#data-table-1').DataTable( {
    data: dataSet,
    columns: [
      { title: "Name" },
      { title: "Position" },
      { title: "Office" },
      { title: "Extn." },
      { title: "Start date" },
      { title: "Salary" }
    ],
  });
  var tableTwo = $('#data-table-2').DataTable( {
    data: dataSet3,
    columns: [
      { title: "Id" },
      { title: "User Name" },
      { title: "Email Id" },

      { title: "Order Id" },
      { title: "Product Name" },
          { title: "Price" },
      { title: "Date" }
    ],
  });
  var tableThree = $('#data-table-3').DataTable( {
    data: dataSet,
    columns: [
      { title: "Id" },
      { title: "Customer Name" },
      { title: "Email Id" },
      { title: "Product Id" },
      { title: "Product Name" },
      { title: "Date" },
    

    ],

  });

  var tableFour = $('#data-table-4').DataTable( {
    data: dataSet6,
    columns: [
      { title: "Id" },
      { title: "Product Name" },
      { title: "Return Issue" },
      { title: "Return Date" },
      { title: "Dispatch Date" },
      { title: "Date" },
      { title:"Action"}

    ],
  });
  var tableFive = $('#data-table-5').DataTable( {
    data: dataSet5,
    columns: [
      { title: "Id" },
      { title: "Customer Name" },

      { title: "Product Name" },
      { title: "Cancel Date" },
      { title: "Action" }
    ],
  });
  var tableThree = $('#data-table-6').DataTable( {
    data: dataSet1,
    columns: [
      { title: "Id" },
      { title: "Customer Name" },
      { title: "Email Id" },
      { title: "No. Of Purchase" },
      { title: "Member Since" },

      { title: "Action" }

    ],

  });

  var tableThree = $('#data-table-7').DataTable( {
    data: dataSet2,
    columns: [
        { title: "Invoice Id" },
        { title: "Product Name" },
        { title: "Order Id" },
        { title: "Invoice Generate Date" },
        { title: "Qty" },
        { title: "Price" },
        { title: "Status" },
        { title: "Action" }
    ],
  });

  var tableThree = $('#data-table-8').DataTable( {
    data: dataSet4,
    columns: [
      { title: "Id" },
      { title: "Product Name" },

      { title: "Product Price" },
      { title: "Date" },
      { title: "No. Of Purchase" },
      { title: "Action" }

    ],

  });


    var tableSaveChangeProduct = $('#data-change-product').DataTable({
        columns: [
            { title: "Save Id" },
            { title: "Modified By" },
            { title: "Modified Date" },
            { title: "Action" }
        ],
    });

    var tableDiscount = $('#data-discount').DataTable({
        columns: [
            { title: "Discount Id" },
            { title: "Discount Code" },
            { title: "Discount Price" },
            { title: "Message" },
            { title: "Situation" },
            { title: "Action" }
        ],
    });

  var tableDiscount = $('#data-post').DataTable({
    columns: [
      { title: "Post Id" },
      { title: "Post Title" },
      { title: "Post Category" },
      { title: "View Count" },
      { title: "Created Date" },
      { title: "Action" }
    ],
  });

  var tableProduct = $('#data-product').DataTable({
    columns: [
      { title: "Product Id" },
      { title: "Product Name" },
      { title: "Product Price" },
      { title: "Create Date" },
      { title: "Category" },
      { title: "Action" }
    ],
  });

  var tableDeleteProduct = $('#data-delete-product').DataTable({
    columns: [
      { title: "Product Id" },
      { title: "Product Name" },
      { title: "Category" },
      { title: "Delete Date" },
      { title: "Action" }
    ],
  });

  var tableDeletePost = $('#data-delete-post').DataTable({
    columns: [
      { title: "Product Id" },
      { title: "Product Name" },
      { title: "Category" },
      { title: "Delete Date" },
      { title: "Action" }
    ],
  });

  var tableCustomer = $('#data-customer').DataTable({
    columns: [
      { title: "Id" },
      { title: "Customer Name" },
      { title: "No. Of Purchase" },
      { title: "Email Id" },
      { title: "Member Since" },
      { title: "Action" }
    ],
  });

  var tableDeleteCustomer = $('#data-delete-customer').DataTable({
    columns: [
      { title: "Id" },
      { title: "Customer Name" },
      { title: "Email Id" },
      { title: "Delete Date" },
      { title: "Action" }
    ],
  });

  var tableInvoice = $('#data-invoice').DataTable({
    columns: [
      { title: "Invoice Id" },
      { title: "Customer Receive" },
      { title: "Invoice Generate Date" },
      { title: "Qty" },
      { title: "Price" },
      { title: "Status" },
      { title: "Action" }
    ],
  });

  var tableListCourseTeach = $('#data-list-course-teach').DataTable({
    columns: [
      { title: "Course Id" },
      { title: "Customer Name" },
      { title: "Start Date" },
      { title: "Progress Time" },
      { title: "Status" },
      { title: "Action" }
    ],
  });
})(jQuery);
