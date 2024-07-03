using System.Collections;
using System.Collections.Generic;
using Unity.Mathematics;
using UnityEngine;
using UnityEngine.UIElements;

public class PlayerMovement : MonoBehaviour
{
    [SerializeField]
    private Transform[] pos;
    [SerializeField]
    private Vector2 posInicial;
    private int aux = 0;
    [SerializeField]
    private bool posPrincipal;
    [SerializeField]
    private float velLateral = 1, speedDrink = 2;
    [SerializeField]
    private GameObject drink;

    public Animator anim;
    void Start()
    {
        anim = GetComponent<Animator>();
        if (pos.Length > 0)
        {
            posInicial = pos[0].position;
            posPrincipal = true;
            transform.position = posInicial;
        }
        else
        {
            Debug.LogError("Array 'pos' está vazio. Por favor, adicione as posições no Inspector.");
        }
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(KeyCode.UpArrow) && aux < pos.Length - 1 && posPrincipal)
        {
            aux++;
            ChangePosition();
        }
        else if (Input.GetKeyDown(KeyCode.DownArrow) && aux > 0 && posPrincipal)
        {
            aux--;
            ChangePosition();
        }
        MovementLateral();
        SpawnDrink();
    }

    void ChangePosition()
    {
        if (posPrincipal)
            transform.position = new Vector2(transform.position.x, pos[aux].position.y);
        else
            return;
    }
    void CheckPosition()
    {
        if (transform.position.x >= pos[aux].position.x)
        {
            transform.position = new Vector3(pos[aux].position.x, transform.position.y, transform.position.z);
            anim.SetBool("WalkingBack",false);
           anim.SetBool("Walking",false);
            posPrincipal = true;

        }

    }
    void MovementLateral()
    {
        if (Input.GetKey(KeyCode.LeftArrow))
        {
            anim.SetBool("Walking",true);
            anim.SetBool("WalkingBack",false);
            posPrincipal = false;
            transform.Translate(-velLateral * Time.deltaTime, 0, 0);
        }
        else if (transform.position.x < pos[aux].position.x)
        {
            transform.Translate(velLateral * Time.deltaTime, 0, 0);
            anim.SetBool("WalkingBack",true);
            anim.SetBool("Walking",false);
            CheckPosition();
        }
    }
    void SpawnDrink()
    {
        if (posPrincipal)
        {
            if (Input.GetKeyDown(KeyCode.Space))
            {

                Instantiate(drink, new Vector3(transform.position.x - 1, transform.position.y, transform.position.z), quaternion.identity);
            }
        }

    }
}