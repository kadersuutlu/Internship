import {all} from 'redux-saga/effects';
import categoriesSagas from './categories';

export default function* rootSaga(){
    yield all ([
        ...categoriesSagas,
    ]);
}