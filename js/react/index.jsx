import React from 'react'
import ReactDOM from 'react-dom';


class Sample extends React.Component{
    render(){
        return (
            <p>Powered by React ⚛</p>
        )
    }
}

ReactDOM.render(<Sample/>,document.getElementById('react-footer'));