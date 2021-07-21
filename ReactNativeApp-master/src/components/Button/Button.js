import * as React from 'react';
import {
  View,
  Text,
  Platform,
  TouchableOpacity,
  TouchableNativeFeedback,
} from 'react-native';
import {Icon} from '../';
import PropTypes from 'prop-types';

const Button = (props) => {
  const {buttonStyle, textStyle} = styles;

  return (
    <TouchableOpacity
      onPress={props.buttonPress}
      style={buttonStyle}>
      <Text style={textStyle}>Click me </Text>
    </TouchableOpacity>
  );
};

const styles = {
  textStyle: {
    fontize: 14,
    fontWeight: '500',
    paddingTop: 6,
    paddingBottom: 6,
    color: 'white',
  },
  buttonStyle: {
    flex: 1,
    alignSelf: 'stretch',
    backgroundColor: 'black',
    borderWidth: 1,
    borderColor: 'gainsboro',
    marginLeft: 7,
    marginRight: 7,
  },
};

export default Button;

// class Button extends React.Component {
//   render() {
//     const TouchableComponent =
//        Platform.OS === 'ios' ? TouchableOpacity : TouchableNativeFeedback;

//     const {icon, onPress,style} = this.props;

//       return (
//       <View style = {[styles.container, style]}>
//         <TouchableComponent onPress = {onPress} style = {styles.touchable}>
//           <View style = {styles.touchableContent}>
//             <Icon name = {icon} tintColor = 'white'/>
//           </View>
//         </TouchableComponent>
//       </View>
//     );
//   }
// }

// Button.propTypes = {
//     icon: PropTypes.string,
//     onPress: PropTypes.func,
//     style: PropTypes.any,
// }
// export default Button;
