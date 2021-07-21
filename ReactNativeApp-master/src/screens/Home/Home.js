import * as React from 'react';
import {createStackNavigator,createAppContainer} from "react-navigation";
import {View, ScrollView, FlatList} from 'react-native';
import Header from '../../components/Header/Header';
import SearchInput from '../../components/Input/SearchInput';
import CategoryObject from './CategoriesObject';
import Button from '../../components/Button/Button';
import PropTypes from 'prop-types';
import {homeStyles as styles } from './styles';
import {connect} from 'react-redux';
import {fetchCategories,changeSearchQuery} from '../../actions/categories';
import CategoryList from '../../components/CategoryList/CategoryList';
import axios from 'axios';
import Home from './Home';
import Desserts from './Dessert';
import Drinks from './Drinks';
import Foods from './Foods';
import Vegetables from './Vegetables';


const AppNavigator=createStackNavigator(
  {
    Home:{ screen:Home},
    Desserts:{ screen:Desserts},
    Drinks:{ screen:Drinks},
    Foods:{ screen:Foods},
    Vegetables:{ screen:Vegetables},
  },
  {
    initialRouteName:'Home',
    headerMode:'none'
  }
);

export default createAppContainer(AppNavigator);


class Home extends React.Component {

  // componentDidMount(){
  //   axios.get('https://givecars.herokuapp.com')
  //   .then((response) => {
  //     this.setState({categoryList: response.data});
  //   });
  // }

 
  onSearchButtonTouched = () => {
    console.warn('search button touched');
  };
  OnChangeSearchQuery = (text) => {
    console.warn('new text = ' + text);
  };

  OnButtonTouched = () =>{
    console.warn();
  }
  render() {
    console.log(this.state);
    return (
      <View style={styles.container}>
        <ScrollView style={styles.container}>
          <Header/>
          <SearchInput
            placeholer="Kategori adı giriniz"
            onPress={this.onSearchButtonTouched}
            onChangeText={this.OnChangeSearchQuery}
            style={styles.searchInput}
          />
          <View style = {styles.line}/>
          <CategoryObject/>
          
        </ScrollView>
        {/* <Button icon = 'arrow' onPress = {this.OnButtonTouched} style = {styles.Button}/> */}
      </View>
    );
  }
}

// Home.propTypes ={
//   dispatch: PropTypes.func,
// };
// const stateToProps = (state) =>{
//   return{};
// };

