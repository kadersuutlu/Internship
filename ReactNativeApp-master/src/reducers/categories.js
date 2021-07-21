import {CategoryActionTypes as ActionTypes} from '../types/ActionTypes';

const initialState = {
    categories: [],
    searchQuery: '',
};

export default function (state = initialState, action){
        switch(action.type){
        default:
            return state;
    }
}


// switch(action.type){
//     case ActionTypes.fetch_categories_result:
//         if(action.hasError){
//             return state;
//         }
//         return{
//             ...state,
//             categories: action.categories,
//         }
//         case ActionTypes.change_search_query:
//             return{
//                 ...state,
//                 searchQuery: action.searchQuery,
//             };