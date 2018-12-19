// Events State
var min_position_y = 0;
var last_position_y = 0;

var screen_height;

//
var view_position_y;
var max_screen_position_y;

// ""
var max_delta_position_y;

var position_in_y_in_percentage;

var on_scroll_is_used = false;

// Events
window.onscroll= function()
{
    if(on_scroll_is_used == false)
    return;
    on_scroll_is_used = true;

    var current_y = window.pageYOffset;

    max_position_y = document.body.scrollHeight;
    screen_height = window.innerHeight;

    calculate_max();

    view_position_y = current_y;
    pageScroll( last_position_y, current_y );

    //
    last_position_y = current_y;
}

// Event Functions
function calculate_max()
{
    max_delta_position_y = max_position_y - screen_height;
}

function pageScroll(last, current)
{
    console.log(max_position_y);
    console.log(current);
    console.log(max_delta_position_y);
    
    calculate_procentage(); 

    updateStates();
};

function calculate_procentage()
{
    position_in_y_in_percentage = Math.round((100/max_delta_position_y)*view_position_y);
    console.log({'percentage_of_view_in_y_axis': position_in_y_in_percentage});
}

function updateStates()
{
    document.getElementById("page-progress-menu-test-only").style.height = position_in_y_in_percentage + "%";
};
