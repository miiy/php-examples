#!/bin/bash

function menu()
{
    clear
    echo "1.menu1"
    echo "2.menu2"
    read -p "Enter your choice: " select

    case $select in
        1)
            echo "menu1"
            ;;
        2)
            echo "menu2"
            ;;
        *)
            echo "default"
            ;;
    esac
}

menu
