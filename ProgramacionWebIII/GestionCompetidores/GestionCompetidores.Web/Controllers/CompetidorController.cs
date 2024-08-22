using GestionCompetidores.Logica.Servicios;
using Microsoft.AspNetCore.Mvc;

namespace GestionCompetidores.Web.Controllers;

public class CompetidorController : Controller
{
    IDeporteService _deporteService;
    ICompetidorService _competidorService;
    
    public CompetidorController(IDeporteService deporteService, ICompetidorService competidorService)
    {
        _deporteService = deporteService;
        _competidorService = competidorService;
    }

    public IActionResult Index(int? idDeporte)
    {
        ViewBag.Deportes = _deporteService.Listar();
        ViewBag.IdDeporteElegido = idDeporte;

        if (idDeporte.HasValue)
        {
            var competidores = _competidorService.ListarPorDeporte(idDeporte.Value);
            return View(competidores);
        }
        else
        {
            var competidores = _competidorService.Listar();
            return View(competidores);
        }
    }
}