import { call, put, takeLatest } from 'redux-saga/effects';
import {fetch_categories_api} from '../api/webApi';
import {CategoryActionTypes as ActionTypes} from '../types/ActionTypes';

import {fetchCategoriesResult} from '../actions/categories';

function* fetchCategoriesSaga(action) {
    try{
        const {searchQuery} = action;
        const response = yield call(fetch_categories_api,searchQuery);
        yield put(fetchCategoriesResult(false, response.data));
    }catch(e){
        yield put(fetchCategoriesResult(true));
    }
}

export default[
    takeLatest(ActionTypes.fetch_categories, fetchCategoriesSaga),
];