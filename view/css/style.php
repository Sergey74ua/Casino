<?php #Casino

header('Content-type: text/css');

$bgColor = 'green';

?>

:root {
  --fontColor: yellow;
}

html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

body {
    background-color: <?=$bgColor;?>;
    color: var(--fontColor);
    border: 1px solid red;
}

form, div {
    margin: 1px;
    color: lime;
    text-align: center;
}

.col {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: stretch;
    width: 100%;
    height: 100%;
}

.row {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: stretch;
    width: 100%;
    height: 100%;
}

.player {
    width: 18%;
    border: 2px solid lime;
    border-radius: 10px;
}

#left {
    width: 45%;
    border: 1px solid yellow;
}

#right {
    width: 55%;
    border: 1px solid lightblue;
}

#table {
    position: relative;
    height: 50%;  /* 75%  */
    border: 1px solid red;
}

#stat {
    height: 25%;
    border: 1px solid black;
}

#room {
    height: 25%;
    border: 1px solid lightcoral;
}

#players {
    width: 100%;
    border: 1px solid navy;
}

#profile {
    width: 20%;
    border: 1px solid white;
}

#betting {
    border: 1px solid lime;
}

#bank {
    height: 25%;
    border: 1px solid blue;
}

#sector {
    position: absolute;
    top: 0;
    right: 0;
    /*transform: rotate(0deg);*/
    border: 1px solid white;
}