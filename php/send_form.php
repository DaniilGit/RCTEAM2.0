<?php
    $fio = $_POST['fio'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $info = $_POST['info'];
    $area = $_POST['area'];
    $height = $_POST['height'];
    $type = $_POST['type'];
    $lift = $_POST['lift'];
    $design = $_POST['design'];
    $redevelopment = $_POST['redevelopment'];
    $dem = $_POST['dem'];
    $wall = $_POST['wall'];
    $mono = $_POST['mono'];
    $electro = $_POST['electro'];
    $sant = $_POST['sant'];
    $floor = $_POST['floor'];
    $alignment_wall = $_POST['alignment_wall'];
    $alignment_ceiling = $_POST['alignment_ceiling'];
    $drywall = $_POST['drywall'];
    $radiator = $_POST['radiator'];
    $gas = $_POST['gas'];
    $heating = $_POST['heating'];
    $windows = $_POST['windows'];
    $door = $_POST['door'];
    $door_meg = $_POST['door_meg'];
    $warming = $_POST['warming'];
    $warm_floor = $_POST['warm_floor'];
    $gidro = $_POST['gidro'];
    $sound = $_POST['sound'];
    $kond = $_POST['kond'];
    $total_budget = $_POST['total_budget'];
    $works_budget = $_POST['works_budget'];
    $black_works_budget = $_POST['black_works_budget'];
    $white_works_budget = $_POST['white_works_budget'];
    $furniture_budget = $_POST['furniture_budget'];
    $questions = $_POST['questions'];

    $living_room = $_POST['living_room'];
    $bed_room = $_POST['bed_room'];
    $children_room = $_POST['children_room'];
    $kitchen = $_POST['kitchen'];
    $corridor = $_POST['corridor'];
    $bath_room = $_POST['bath_room'];
    $restroom = $_POST['restroom'];
    $wardrobe = $_POST['wardrobe'];
    $cabinet = $_POST['cabinet'];
    $loggia = $_POST['loggia'];

    $living_room_input = $_POST['living_room_input'];
    $bed_room_input = $_POST['bed_room_input'];
    $children_room_input = $_POST['children_room_input'];
    $kitchen_input = $_POST['kitchen_input'];
    $corridor_input = $_POST['corridor_input'];
    $bath_room_input = $_POST['bath_room_input'];
    $restroom_input = $_POST['restroom_input'];
    $wardrobe_input = $_POST['wardrobe_input'];
    $cabinet_input = $_POST['cabinet_input'];
    $loggia_input = $_POST['loggia_input'];

    if (mail(
    "info@rcteam54.ru", "Форма с сайта", 
    "\nФИО: ".$fio.
    "\nТелефон: ".$phone.
    "\nАдрес: ".$adress.
    "\nEmail: ".$email.
    "\nКогда Вы готовы приступить к ремонту: ".$data.
    "\nИсточник информации: ".$info.
    "\nОбщая площадь: ".$area.
    "\nВысота потолков: ".$height.
    "\nТип помещения: ".$type.
    "\nНаличие лифта: ".$lift.
    "\nНаличие дизайн-проекта: ".$design.
    "\nНеобходимость согласования перепланировки: ".$redevelopment.
    "\nДемонтажные работы: ".$dem.
    "\nМонтаж стен: ".$wall.
    "\nМонолитные конструкции: ".$mono.
    "\nЭлектромонтажные работы: ".$electro.
    "\nСантехнические работы: ".$sant.
    "\nВыравнивание пола: ".$floor.
    "\nВыравнивание стен ".$alignment_wall.
    "\nВыравнивание потолков: ".$alignment_ceiling.
    "\nГиспокартоновые конструкции: ".$drywall.
    "\nЗамена радиаторов: ".$radiator.
    "\nИзменение газовой точки: ".$gas.
    "\nСтояки отполения: ".$heating.
    "\nОкна и откосы: ".$windows.
    "\nВходная дверь: ".$door.
    "\nМежкомнатные двери и арки: ".$door_meg.
    "\nУтепление стен: ".$warming.
    "\nТеплый пол: ".$warm_floor.
    "\nТеплый пол: ".$gidro.
    "\nЗвукоизоляция: ".$sound.
    "\nКондиционер и вентиляция: ".$kond.
    "\nГостинная: ".$living_room_input. 
    " м2: ".$living_room.
    "\nСпальня: ".$bed_room_input. 
    " м2: ".$bed_room.
    "\nДетская комната: ".$children_room_input. 
    " м2: ".$children_room.
    "\nКухня: ".$kitchen_input. 
    " м2: ".$kitchen.
    "\nКоридор: ".$corridor_input. 
    " м2: ".$corridor.
    "\nВанная: ".$bath_room_input. 
    " м2: ".$bath_room.
    "\nСанузел: ".$restroom_input. 
    " м2: ".$restroom.
    "\nГардероб: ".$wardrobe_input. 
    " м2: ".$wardrobe.
    "\nКабинет: ".$cabinet_input. 
    " м2: ".$cabinet.
    "\nЛоджия: ".$loggia_input. 
    " м2: ".$loggia.
    "\nОбщий бюджет на все: " .$total_budget.
    "\nНа производство работ: ".$works_budget.
    "\nНа черновые материалы: ".$black_works_budget.
    "\nНа чистовые материалы: ".$white_works_budget.
    "\nНа мебель: ".$furniture_budget.
    "\nВопросы: ".$questions
    )) { 
        $link = '../index.html';
        header ('Location: ' .$link);
    } else {
        echo $fio;
    }

?>