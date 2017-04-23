﻿using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Buttons : MonoBehaviour
{
    public GameObject m_on, m_off;
    public Sprite layer_blue, layer_red;

    void Start ()
    {
        if (gameObject.name == "Music") {
            if (PlayerPrefs.GetString("Music") == "no")
            {
                m_on.SetActive(false);
                m_off.SetActive(true);
            }
            else
            {
                m_on.SetActive(true);
                m_off.SetActive(false);
            }
        }
    } 
    void OnMouseDown()
    {
        GetComponent<SpriteRenderer>().sprite = layer_red;
    }

    void OnMouseUp()
    {
        GetComponent<SpriteRenderer>().sprite = layer_blue;
    }

    void OnMouseUpAsButton()
    {
        if (PlayerPrefs.GetString("Music") != "no")
            GameObject.Find ("Click Audio").GetComponent <AudioSource> ().Play ();
        switch (gameObject.name)
        {
            case "Youtube":
                Application.OpenURL("https://www.youtube.com/");
                break;
            case "Play":
                Application.LoadLevel("play");
                break;
            case "Replay":
                Application.LoadLevel("play");
                break;
            case "Home":
                Application.LoadLevel("main");
                break;
            case "Facebook":
                Application.OpenURL("https://www.facebook.com/");
                break;
            case "How To":
                Application.LoadLevel("howTo");
                break;
            case "Close":
                Application.LoadLevel("main");
                break;
            case "Music":
                if (PlayerPrefs.GetString("Music") != "no") {
                    PlayerPrefs.SetString("Music", "no");
                    m_on.SetActive(false);
                    m_off.SetActive(true);
                }

                else
                {
                        PlayerPrefs.SetString("Music", "yes");
                    m_on.SetActive(true);
                    m_off.SetActive(false);
                }
                    break;
        }
    }
}