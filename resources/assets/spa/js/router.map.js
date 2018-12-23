export default [
    {
        name: 'class_informations.list',
        path: '/classes',
        component: require('./components/teacher/TeacherClassInformationList')
    },
    {
        name: 'login',
        path: '/login',
        component: require('./components/Login')
    },
    {
        path: '*',
        redirect: '/login'
    }
]