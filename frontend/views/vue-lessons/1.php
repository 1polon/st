<div id="app">
    <span v-bind:title="message">наведи на меня курсор</span>
</div>

<div id="app3">
    <span v-if="seen">сейчас сеня виндо</span>
</div>

<div id="app4">
    <ol>
        <li v-for="todo in todos">
        {{ todo.text }}
        </li>
    </ol>
</div>


<div id="a5">
    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">reverse message</button>
</div>

<div id="a6">
    <p>{{ message }}</p>
    <input type="text" v-model="message">
</div>

<div id="a7">
    <todo-item v-for="item in groceryList" v-bind:todo="item" v-bind:key="item.id"></todo-item>
</div>


<div id="a8">
{{ message }}
<button v-on:click="message = 'you are past('">try to click me litle pony</button>
</div>


<div id="a9">
    {{ text }}
</div>

<div id="a10">
    <p>{{ message }}</p>
    <p>{{ reverseMessage }}</p>
</div>


<div id="a11">
    <p>имя {{ text }}</p>
    <p>полное имя {{ textFull }}</p>
</div>

<div id="a12">
    <!-- <p>{{ names }}</p> -->
    <p>{{ firstName }}</p>
    <p>{{ lastName }}</p>
    <p>{{ fullName }}</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<div id="a13">
    <p>задайте вопрос</p>
    <input type="text" v-model="question">
    <p>{{ answer }}</p>
</div>

<div id="a14" class="asdf" :class="{ active: isActive, 'text-danger': hasError }">
<p :class="classObject">danger</p>
<p :class="newClassObject">new class object</p>
</div>


<div id="a15">
    <p :class="[activeClass, errorClass]">helo there</p>
</div>

<div id="a16">
    <p :style="{color: activeColor, fontSize: fontSize + 'px'}">ola and suck my dick</p>
</div>

<div id="a17">
    <p :style="flexStyleObj">fleeeeex</p>
</div>

<div class="a18">
<div v-if="Math.random() > 0.5">
now you see me
</div>
<div v-else>am your father</div>
</div>
<div id="a19">
<template v-if="loginType === 'username'">
    <label for="a19input">Имя пользователя</label>
    <input name="a18input" type="text" key="username-input" placeholder="Введите имя пользователя">
</template>
<template v-else>
    <label for="a19input">введите свою почту</label>
    <input name="a18input" type="text" key="email-input" placeholder="почтовый адрес">
</template>
<button v-on:click="switchLoginType">switch login type</button>
<p v-show="false">true show</p>
</div>

<div id="a20">
    <ul>
        <li v-for="item in items">{{ item.message }}</li>
    </ul>
</div>
<ul id="a21">
    <li v-for="(item, index) in items">
    {{ parentMessage }} {{ index }} {{item.message}}
    </li>
</ul>


<ol id="a22">
    <li v-for="(value, key, index) of object">{{ value }} {{ key }} {{ index }}</li>
</ol>

<ul id="a23">
    <li v-for="value in values">{{ value.name }}</li>
</ul>

<ul id="a24">
    <li v-for="item in getNormalNumbers">{{ item }}</li>
</ul>

<ul id="a25">
    <ul v-for="item in items">
        <li v-for="it in getNormalNumbers(item)">{{ it }}</li>
    </ul>
</ul>

<!-- <div id="a26">
    <form @submit.prevent="addNewTodo">
        <label for="new-todo">Добавить новую задачу</label>
        <input v-model="newTodoText" id='new-todo'>
        <button>добавить</button>
    </form>
    <ul>
        <li 
            is='todo-item' 
            v-for='(todo, index) in todos' 
            v-bind:key="todo.id" 
            v-bind:title="todo.title"
            v-on:remove="todos.splice(index, 1)"
        > 
        </li>
    </ul>


</div> -->





<!--
            is='todo-item' 
    
     v-bind:key="todo.id" 
v-bind:title="todo.title"
v-on:remove="todos.splice(index, 1)"     -->



<div id="a27">
    <button v-on:click="counter += 1">+1</button>
    <p>button click {{ counter }}</p>
</div>



<div id="a28">
    <button v-on:click="alert('asdf', $event)">alert</button>
</div>

<div id="a29">
<input type="text" v-model="message" placeholder="веди меня">
<p>your entered text here: {{ message }}</p>
</div>

<div id="a30"><input type="checkbox" id="checked" v-model="checked"><label for="checked"> {{ checked }}</label></div>

<div id="a31">
    <input id="checkedNames1" value="Вася" type="checkbox" v-model="checkedNames">
    <label for="checkedNames1">Вася</label>
    <input id="checkedNames2" value="Петя" type="checkbox" v-model="checkedNames">
    <label for="checkedNames2">Петя</label>
    <input id="checkedNames3" value="Иван" type="checkbox" v-model="checkedNames">
    <label for="checkedNames3">Иван</label>
    <p>{{ checkedNames }}</p>
</div>

<div id="a32">
    <input type="radio" v-model="picked" id="id1" value="один">
    <label for="id1">id1</label>
    <input type="radio" v-model="picked" id="id2" value="два">
    <label for="id2">id2</label>
    <p>{{ picked }}</p>
</div>
















































