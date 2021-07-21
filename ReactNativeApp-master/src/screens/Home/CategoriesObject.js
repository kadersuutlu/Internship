import React, {Component} from 'react';
import {
  TouchableHighlight,
  View
} from 'react-native';
import {CategoryObjectStyles as styles} from './styles';
import axios from 'axios';
import CategoryDetails from './CategoryDetails';


class CategoryObject extends Component {
  constructor() {
    super();

    this.state = {categoryList: []};
  }

  componentDidMount() {
    axios.get('https://my-categories-api.herokuapp.com/categories').then(response => {
      this.setState({categoryList: response.data});
    });
  }

  renderList = () => {
    return this.state.categoryList.map(category => {
      return <CategoryDetails key = {category.category} category = {category}/>
    });
  };
render(){
  <view style={styles.backgroundColor}>
    <text style={styles.welcome}>Home.js</text>
    <TouchableHighlight style={styles.touch} onPress={()=>{this.props.navigation.navigate('Foods')}}>
    </TouchableHighlight>
    <TouchableHighlight style={styles.touch} onPress={()=>{this.props.navigation.navigate('Drinks')}}>
    </TouchableHighlight>
    <TouchableHighlight style={styles.touch} onPress={()=>{this.props.navigation.navigate('Desserts')}}>
    </TouchableHighlight>
    <TouchableHighlight style={styles.touch} onPress={()=>{this.props.navigation.navigate('Vegetables')}}>
    </TouchableHighlight>
  </view>
}
  render() {
    // const TouchableComponent =
    //   Platform.OS === 'ios' ? TouchableOpacity : TouchableNativeFeedback;
    // const categoryName = 'Foods';
    // const categoryName2 = 'Drinks';

    return (
      <View>
        {/* <View style={styles.categorySembol} /> */}
        {this.renderList()}
      </View>
    );
  }
}


export default CategoryObject;
