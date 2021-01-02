var app = new Vue({
    el: '#app',
    data: {
        message: "вы загрузили эту страницу" + Date.now()
    }
})

var app3 = new Vue({
    el: '#app3',
    data: {
        seen: true
    }
})

let app4 = new Vue({
    el: '#app4',
    data: {
        todos: [
            { text: "text 1"},
            { text: "text 2"},
            { text: "text 3"},
        ]
    }
})

let a5 = new Vue({
    el: '#a5',
    data: {
        message: 'Этот текст будет перевернут'
    },
    methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
    }
})

let a6 = new Vue({
    el: '#a6',
    data: {
        message: 'я огурчик'
    }
})


Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
})
let a7 = new Vue({
    el: '#a7',
    data: {
        groceryList: [
            {id: 0, text: 'Огурчик'},
            {id: 1, text: 'Железо'},
            {id: 2, text: 'Кошко девочки'},
        ]
    }
});
let a8obj = {message: 'you shall not past'};
// Object.freeze(a8obj)
let a8 = new Vue({
    el: '#a8',
    data: a8obj
});

data9 = {text: 'drupal suck'};
let a9 = new Vue({
    el: '#a9',
    data: data9
})
// console.log(a9.$data === data9);
// console.log(a9.$el === document.getElementById('a9'));
a9.$watch('text', function (newValue, oldValue){
    console.log(newValue, oldValue);
    return 'my value';
})


let a10 = new Vue({
    el: '#a10',
    data: {
        message: "Furri is stupid"
    },
    computed: {
        reverseMessage: function () {
            return this.message.split('').reverse().join('');
        }
    }
})

let a11 = new Vue({
    el: '#a11',
    data: {
        text: 'Рыжий',
        text2: "Колбаска"
    },
    computed: {
        textFull: function () {
            return this.text + ' ' + this.text2;
        }
    }
})

let a12 = new Vue({
    el: '#a12',
    data: {
        firstName: 'a',
        lastName: 'b'
    },
    computed: {
        fullName: {
            get: function () {
                return this.firstName + " " + this.lastName;
            },
            set: function (newValue) {
                var names = newValue.split(' ');
                this.firstName = names[0];
                this.lastName = names[names.length - 1] + 'setter';
            }
        }
    }
})


let a13 = new Vue({
    el: '#a13',
    data: {
        question: '',
        answer: "enter your question"
    },
    watch: {
        question: function (newQuestin, oldQuestin) {
            this.answer = 'Ожидаю пока вы закончите перечатать'
            this.debouncedGetAnswer()
        }
    },
    created: function () {
        this.debouncedGetAnswer = _.debounce(this.getAnswer, 500)
    },
    methods: {
        getAnswer: function () {
            if (this.question.indexOf('?') === -1) {
                this.answer = 'Воспросы обычно заказнчиваются вопросительным знаком'
                return
            }
            this.answer = 'Думаю'
            var vm = this
            axios.get('https://yesno.wtf/api')
                .then(function (responce) {
                    vm.answer = _.capitalize(responce.data.answer)
                })
                .catch(function (error) {
                    vm.answer = 'Ошибка соединения с api' + error
                })
        }
    }
})

let a14 = new Vue({
    el: '#a14', 
    data: {
        isActive: true,
        hasError: true,
        error: {
            type: 'fatal'
        },
        classObject: {
            active: false,
            'text-alert': true
        }
    },
    computed: {
        newClassObject: function () {
            return {
                active: this.isActive && !this.error,
                'test-success': this.error && this.error.type === 'fatal'
            }
        }
    }
})

let a15 = new Vue({
    el: '#a15',
    data: {
        activeClass: 'active',
        errorClass: 'error class',
    }
})

let a16 = new Vue({
    el: '#a16',
    data: {
        activeColor: 'orange',
        fontSize: '30',
    }
})

let a17 = new Vue({
    el: '#a17',
    data: {
        flexStyleObj: {
            display: ['-webkit-box', '-ms-flexbox', 'flex']
        }
    }
})

let a18 = new Vue({
    el: '.a18'
})

let a19 = new Vue({
    el: '#a19',
    data: {
        loginType: 'email'
    },

    methods: {
        switchLoginType: function () {
            this.loginType === 'username' ? this.loginType = 'email' : this.loginType = 'username';
        }
    }
})

let a20 = new Vue({
    el: '#a20',
    data: {
        items: [
            {message: 'tits'},
            {message: 'ass'}
        ]
    }
})

let a21 = new Vue({
    el: '#a21',
    data: {
        parentMessage: 'parent message',
        items: [
            {message: 'sisze 3'},
            {message: 'size 4'}
        ]
    }
})

let a22 = new Vue({
    el: '#a22',
    data: {
        object: {
            name: 'Name',
            surname: 'Surname',
            lastName: 'LastName'
        }
    }
})

let a23 = new Vue({
    el: '#a23',
    data: {
        values: [
            {id: 1, name: 'name1'},
            {id: 2, name: 'name2'},
            {id: 3, name: 'name3'},
        ]
    }
})

let a24 = new Vue({
    el: '#a24',
    data: {
        numbers: [1,2,3,4,5,6,7,8,8,8]
    },
    computed: {
        getNormalNumbers: function () {
            return this.numbers.filter(function (number) {
                return number % 2 === 0
            })
        }
    }
})


let a25 = new Vue({
    el: '#a25',
    data: {
        items: [[12,3,4,5,6,2], [234,5,3,2,5]]
    },
    methods: {
        getNormalNumbers: function(numbers) {
            return numbers.filter(function (number) {
                return number % 2 === 0;
            })
        }
    }
})


// Vue.component('todo-item', {
//     template: '\
//       <li>\
//         {{ title }}\
//         <button v-on:click="$emit(\'remove\')">Удалить</button>\
//       </li>\
//     ',
//     props: ['title']
//   })
// let a26 = new Vue({
//     el: '#a26',
//     data: {
//         todos: [
//             {id: 1, title: 'title 1'},
//             {id: 2, title: 'title 2'},
//             {id: 3, title: 'title 3'},
//             {id: 4, title: 'title 4'},
//         ],
//         nextTodoId: 5,
//         newTodoText: ''
        
//     },
//     methods: {
//         addNewTodo: function () {
//             this.todos.push({id: this.nextTodoId++, title: this.newTodoText})
//             this.newTodoText = ''
//         }
//     }
// })

let a27 = new Vue({
    el: '#a27',
    data: {
        counter: 0
    }
})

let a28 = new Vue({
    el: '#a28',
    data: {
        name: 'name'
    },
    methods: {
        alert: function(m, e) {
            alert('hi' + this.name)
            if (e) {
                alert(e.target.tagName)
            }
            console.log(e);
        }
    }
})


let a29 = new Vue({
    el: '#a29',
    data: {
        message: ''
    }
})

let a30 = new Vue({
    el: '#a30',
    data: {
        checked: true
    }
})

let a31 = new Vue({
    el: '#a31',
    data: {
        checkedNames: []
    }
})

let a32 = new Vue({
    el: '#a32',
    data: {
        picked: ''
    }
})
// основы компонентов