<?php
function fellowship (
    $fullName,
    $parent = null,
    $race,
    $titles = [],
    $ringbearer = false
) {
    return [
        'full_name' => $fullName,
        'parent' => $parent,
        'race' => $race,
        'titles' => $titles,
        'ring_bearer' => $ringbearer
    ];
};

function hobbit (
    $fullName,
    $parent = null,
    $titles = [],
    $ringbearer = false
) {
    return fellowship($fullName, $parent, 'hobbit', $titles, $ringbearer);
}

return [
    "fellowship" => [
        "frodo" => hobbit('Frodo Baggins', 'Drogo', ['Elf-friend', 'Ring Bearer'], true),
        "sam" => hobbit('Samwise Gamgee', 'Hamfast', ['Mayor of the Shire'], true),
        "merry" => hobbit('Merriadoc Brandybuck', 'Seradoc', ['Holdwine of the Mark']),
        "pippin" => hobbit('Peregrin Took', 'Palladin', ['Knight of Gondor', 'Pheriannath', 'Thain']),
        "gandalf" => fellowship('Gandalf the Grey', null, 'Maiar', ['Greyhame', 'Stormcrow', 'Olorin', 'Incanus', 'Tharkun', 'Gandalf the Grey', 'Gandalf the White', 'Mithrandir', 'The Grey Pilgrim', 'The White Rider', 'Lathspell']),
        "aragorn" => fellowship('Aragorn', 'Arathorn', 'human', ['The Dunadan', 'Longshanks','Strider', 'Telcontar','Elessar','Wingfoot','Enviyatar', 'Estel', 'Thorongil']),
        "boromir" => fellowship('Boromir', 'Denethor', 'human', ['Captain of the White Tower','High Warden of the White Tower']),
        "legolas" => fellowship('Legolas Greenleaf', 'Thranduil', 'elf', ['Prince of the Wooden Realm']),
        "gimli" => fellowship('Gimli', 'Gloin', 'dwarf', ['Elf-friend', 'Lockbearer', 'Lord of the Glittering Caves'])
    ],
    "characters" => [
        "Bilbo", "Frodo", "Sam", "Gandalf", "Merry", "Pippin", "Galadriel",
        "Frediger","Lobelia", "Lotho", "Sauron", "Saruman","Radagast",
        "Gimli", "Gloin","Legolas", "Elrond","Glorfindel", "Thranduil",
        "Gwaihir", "Aragorn","Boromir", "Faramir", "Denethor", "Gollum",
        "Elendil","Luthien"
    ],
    "enemies" => [
        "Nazgul", "Barrow Wights", "Sauron", "Saruman", "Gollum"
    ],
    "weapons" => [
        "Narsil", "Anduril", "Guthwine", "Sting", "Glamdring", "Orcrist", "Herugrim", "Aeglos"
    ],
    "author" => "J.R.R. Tolkien",
    "book" => "The Fellowship of the Ring"
];